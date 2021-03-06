<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:24.
*/

class classxmlformTemplateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var xmlformTemplate
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $form = '';
        $templateFile = '';
        $this->object = new xmlformTemplate(&$form, $templateFile);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('xmlformTemplate');        $this->assertTrue( count($methods) == 68);
    }

    /**
    * @covers xmlformTemplate::xmlformTemplate
    * @todo   Implement testxmlformTemplate().
    */
    public function testxmlformTemplate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('xmlformTemplate', $methods ), 'exists method xmlformTemplate' );
        $r = new ReflectionMethod('xmlformTemplate', 'xmlformTemplate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'templateFile');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::printTemplate
    * @todo   Implement testprintTemplate().
    */
    public function testprintTemplate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printTemplate', $methods ), 'exists method printTemplate' );
        $r = new ReflectionMethod('xmlformTemplate', 'printTemplate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'target');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'smarty');
    }

    /**
    * @covers xmlformTemplate::printJavaScript
    * @todo   Implement testprintJavaScript().
    */
    public function testprintJavaScript()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printJavaScript', $methods ), 'exists method printJavaScript' );
        $r = new ReflectionMethod('xmlformTemplate', 'printJavaScript');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::printJSFile
    * @todo   Implement testprintJSFile().
    */
    public function testprintJSFile()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printJSFile', $methods ), 'exists method printJSFile' );
        $r = new ReflectionMethod('xmlformTemplate', 'printJSFile');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::getFields
    * @todo   Implement testgetFields().
    */
    public function testgetFields()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getFields', $methods ), 'exists method getFields' );
        $r = new ReflectionMethod('xmlformTemplate', 'getFields');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'therow');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '-1');
    }

    /**
    * @covers xmlformTemplate::printObject
    * @todo   Implement testprintObject().
    */
    public function testprintObject()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printObject', $methods ), 'exists method printObject' );
        $r = new ReflectionMethod('xmlformTemplate', 'printObject');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'form');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'therow');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '-1');
    }

    /**
    * @covers xmlformTemplate::_get_template
    * @todo   Implement test_get_template().
    */
    public function test_get_template()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('_get_template', $methods ), 'exists method _get_template' );
        $r = new ReflectionMethod('xmlformTemplate', '_get_template');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tpl_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'tpl_source');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'smarty_obj');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::_get_timestamp
    * @todo   Implement test_get_timestamp().
    */
    public function test_get_timestamp()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('_get_timestamp', $methods ), 'exists method _get_timestamp' );
        $r = new ReflectionMethod('xmlformTemplate', '_get_timestamp');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tpl_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'tpl_timestamp');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'smarty_obj');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::_get_secure
    * @todo   Implement test_get_secure().
    */
    public function test_get_secure()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('_get_secure', $methods ), 'exists method _get_secure' );
        $r = new ReflectionMethod('xmlformTemplate', '_get_secure');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tpl_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'smarty_obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers xmlformTemplate::_get_trusted
    * @todo   Implement test_get_trusted().
    */
    public function test_get_trusted()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('_get_trusted', $methods ), 'exists method _get_trusted' );
        $r = new ReflectionMethod('xmlformTemplate', '_get_trusted');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tpl_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'smarty_obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

  }
