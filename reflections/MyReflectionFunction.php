<?php

/**
 * ReflectionFunction summary wrapper
 * 
 */
class MyReflectionFunction {
    
    public static function getSummary($functionName) {
        $instance = new ReflectionFunction($functionName);

        echo '<h1>ReflectionFunction class</h1>';

        echo '<fieldset>';
        echo    '<legend>static export($name)</legend>';
        var_dump($instance->export($functionName, true));    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getClosure()</legend>';
        var_dump($instance->getClosure());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getClosureScopeClass()</legend>';
        var_dump($instance->getClosureScopeClass());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getClosureThis()</legend>';
        var_dump($instance->getClosureThis());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getClosureThis()</legend>';
        var_dump($instance->getDocComment());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getEndLine()</legend>';
        echo    $instance->getEndLine();    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getExtension()</legend>';
        var_dump($instance->getExtension());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getExtensionName()</legend>';
        var_dump($instance->getExtensionName());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getFileName()</legend>';
        var_dump($instance->getFileName());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getName()</legend>';
        var_dump($instance->getName());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getNamespaceName()</legend>';
        var_dump($instance->getNamespaceName());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getNumberOfParameters()</legend>';
        echo    $instance->getNumberOfParameters();    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getNumberOfRequiredParameters()</legend>';
        echo    $instance->getNumberOfRequiredParameters();    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getParameters()</legend>';
        var_dump($instance->getParameters());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getShortName()</legend>';
        echo    $instance->getShortName();    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getStartLine()</legend>';
        echo    $instance->getStartLine();    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>getStaticVariables()</legend>';
        var_dump($instance->getStaticVariables());    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>inNamespace()</legend>';
        echo ($instance->inNamespace() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>invoke()</legend>';
//        $instance->invoke('test1', 'test2');    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>invokeArgs()</legend>';
//        $instance->invokeArgs(array('first', 'second'));    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>isClosure()</legend>';
        echo ($instance->isClosure() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>isDeprecated()</legend>';
        echo ($instance->isDeprecated() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>isDisabled()</legend>';
        echo ($instance->isDisabled() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>isInternal()</legend>';
        echo ($instance->isInternal() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>isUserDefined()</legend>';
        echo ($instance->isUserDefined() == true) ? 'true' : 'false';    
        echo '</fieldset>';

        echo '<fieldset>';
        echo    '<legend>returnsReference()</legend>';
        echo ($instance->returnsReference() == true) ? 'true' : 'false';    
        echo '</fieldset>';
    }
}