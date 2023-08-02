<?php
require_once 'Collection.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class TemplRow {
    // Attributes
    /**
     * XXX
     *
     * @var    Collection
     * @access protected
     */
    protected $content;

    // Associations
    /**
     * XXX
     *
     * @var    Collection $unnamed
     * @access private
     * @accociation Collection to unnamed
     */
    #var $unnamed;

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
