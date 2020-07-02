<?php

namespace App\Datatables;

use Sg\DatatablesBundle\Datatable\AbstractDatatable as SqAbstractDatatable;
use Sg\DatatablesBundle\Datatable\Style;

abstract class AbstractDatatable extends SqAbstractDatatable
{

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function buildDatatable(array $options = array())
    {
        // default configuration
        $this->options->set(array(
            'classes'                               => Style::BOOTSTRAP_4_STYLE,
            'paging_type'                           => Style::FULL_NUMBERS_PAGINATION,
            'individual_filtering'                  => false,
        ));
        $this->language->set(array(
//          'cdn_language_by_locale' => true,
            'language_by_locale'        => true,
        ));

        //          default futures
        $this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'state_save' => false,
        ));

        $this->callbacks->set(array(

        ));
    }

    public function getCurrency()
    {
        return 'EUR';
    }
}