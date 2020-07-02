<?php

namespace App\Datatables;

abstract class SimpleDatatable extends AbstractDatatable
{
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function buildDatatable(array $options = array())
    {
        parent::buildDatatable($options);

        $this->getFeatures()->setInfo(false);
        $this->getFeatures()->setLengthChange(false);
        $this->getFeatures()->setOrdering(false);
        $this->getFeatures()->setPaging(false);
        $this->getFeatures()->setProcessing(false);
        $this->getFeatures()->setSearching(false);
    }

}