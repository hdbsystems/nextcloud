<?php

namespace OCA\MSOfficeViewer\Tests\Unit\Controller;

use PHPUnit_Framework_TestCase;

use OCP\AppFramework\Http\TemplateResponse;


class DisplayControllerTest extends PHPUnit_Framework_TestCase {
        private $controller;
        private $userId = 'john';

        public function setUp() {
                $request = $this->getMockBuilder('OCP\IRequest')->getMock();

                $this->controller = new DisplayController(
                        'msofficeviewer', $request, $this->userId
                );
        }

        public function testIndex() {
                $result = $this->controller->index();

                $this->assertEquals('index', $result->getTemplateName());
                $this->assertTrue($result instanceof TemplateResponse);
        }

}
