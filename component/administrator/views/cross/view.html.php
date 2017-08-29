<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewCross extends JViewLegacy {
    protected $item, $form, $script, $stationName;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');
        $this->stationName = $this->item->station;

        $this->addToolbar();

        parent::display($tpl);
        $this->setDocument();
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        $title = $isNew ? JText::_('COM_RAILWAY2_METRO_ADDING_CROSS') : JText::_('COM_RAILWAY2_METRO_EDITING_CROSS').' '.$this->stationName;

        JToolbarHelper::title($title, 'cross');
        JToolbarHelper::apply('cross.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('cross.save');
        JToolbarHelper::cancel('cross.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}