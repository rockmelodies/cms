<?php
/**
 * HTTP_Exception_416 Class
 *
 * @package    Gleez\HTTP
 * @author     Gleez Team
 * @version    1.0.0
 * @copyright  (c) 2011-2013 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class HTTP_Exception_416 extends HTTP_Exception {

	/**
	 * HTTP 416 Request Range Not Satisfiable
	 * @var integer
	 */
	protected $_code = 416;
}