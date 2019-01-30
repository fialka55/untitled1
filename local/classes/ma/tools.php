<?php 
/**
 * Вспомогательные функции
 */

namespace MA;

function includeClass($class) {
    $docRoot = \Bitrix\Main\Application::getDocumentRoot();
    $class = strtolower(str_replace('\\', '/', $class));
    include_once $docRoot.'/local/classes/'.$class.'.php';
}

function log($var='', $varName=null, $opts) {
    $arTrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT);
    $arFunc = array_shift($arTrace);
    $fileLog = dirname($arFunc['file']).'/info.log';
    if ('clear' === $var) {
        file_put_contents($fileLog, '');
        return;
    }

    $msg = '--- ['.date('d.m.Y H:i:s').'] '.$arFunc['file'].':'.$arFunc['line'].' ---'.PHP_EOL;
    if ('' === $var) $var = 'empty';
    elseif (null === $var) $var = 'null';
    elseif (false === $var) $var = 'false';
    elseif (true === $var) $var = 'true';
    elseif (is_array($var) && 0 === count($var)) $var = 'array()';
    if (!empty($varName) && gettype($var) !== 'array' && gettype($var) !== 'object'
         && gettype($var) !== 'resource' && gettype($var) !== 'recource (closed)') {
        $msg .= (string)$varName.': ';
    } elseif (!empty($varName)) {
        $msg .= (string)$varName.':'.PHP_EOL;
    }
    $msg .= print_r($var, true).PHP_EOL.PHP_EOL;
    file_put_contents($fileLog, $msg, FILE_APPEND | LOCK_EX);
}

function dump($var='', $varName=null)
{
    if ('off' == $_GET['dump']) {
        $_SESSION['DUMP'] = 'N';

    } elseif ('on' == $_GET['dump'] || 'Y' == $_SESSION['DUMP']) {
        /** 
         * @todo добавить отключенние композита (добавление куки NCC)
         */
        $ncc = false;
        if (class_exists('\Bitrix\Main\Data\StaticHtmlCache')) {
            \Bitrix\Main\Data\StaticHtmlCache::getInstance()->markNonCacheable();
            $ncc = true;
        }
        $_SESSION['DUMP'] = 'Y';
        if ('' === $var) $var = '<i>empty</i>';
        elseif (null === $var) $var = 'null';
        elseif (false === $var) $var = 'false';
        elseif (true === $var) $var = 'true';
        elseif (is_array($var) && 0 === count($var)) $var = 'array()';

        echo '<pre style="display: block; padding: 10px; margin: 10px 0; clear: both; word-break: break-all; word-wrap: break-word; background-color: #f5f5f5; border: 1px solid #ccc; text-align: left; font: 12px Menlo, Courier New, monospace; color: green; border-radius: 0;">';

        if (!$ncc) echo '([warning] composite is enabled)'.PHP_EOL;

        if (in_array('show-files', array_keys($_GET))) {
            $arTrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT);
            $arFunc = array_shift($arTrace);
            echo $arFunc['file'].':'.$arFunc['line'].PHP_EOL;
        }

        if (!empty($varName) && gettype($var) !== 'array' && gettype($var) !== 'object'
             && gettype($var) !== 'resource' && gettype($var) !== 'recource (closed)') {
            echo (string)$varName.': ';

        } elseif (!empty($varName)) {
            echo (string)$varName.':'.PHP_EOL;
        }

        print_r($var);
        echo '</pre>';
    }
}