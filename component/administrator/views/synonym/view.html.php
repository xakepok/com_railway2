<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewSynonym extends JViewLegacy {
    protected $item, $form, $script, $stationName;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');
        //$this->stationName = $this->item->name;

        $this->addToolbar();

        parent::display($tpl);
        $this->setDocument();
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        //$isNew = ($this->item->id == 0);
        $title = JText::_('COM_RAILWAY2_SYNONYMS');

        JToolbarHelper::title($title, 'station');
        JToolbarHelper::apply('synonym.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('synonym.save');
        JToolbarHelper::cancel('synonym.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}