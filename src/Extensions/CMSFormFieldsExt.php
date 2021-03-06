<?php
namespace Axllent\FormFields\Extensions;

use SilverStripe\Admin\LeftAndMainExtension;
use SilverStripe\View\Requirements;

class CMSFormFieldsExt extends LeftAndMainExtension
{
    /**
     * Init
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        Requirements::css('axllent/silverstripe-form-fields: css/cms-form-fields.css');
        Requirements::javascript('axllent/silverstripe-form-fields: javascript/cms-form-fields.js');
    }
}
