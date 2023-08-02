<?php
require_once 'Collection.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class ContentElement {
    // Attributes
    /**
     * XXX
     *
     * @var    string
     * @access public
     */
    public $name;

    /**
     * XXX
     *
     * @var    string
     * @access public
     */
    public $class;

    /**
     * XXX
     *
     * @var    string
     * @access public
     */
    public $id;

    /**
     * XXX
     *
     * @var    Collection
     * @access public
     */
    public $attributes;

    // Associations
    // Operations
    /**
     * XXX
     * 
     * @return string XXX
     * @access public
     */
    public function getHTML()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
