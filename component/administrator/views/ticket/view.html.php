<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewTicket extends JViewLegacy {
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
        $title = JText::_('COM_RAILWAY2_STATION_DESC_TIME');

        JToolbarHelper::title($title, 'ticket');
        JToolbarHelper::apply('ticket.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('ticket.save');
        JToolbarHelper::cancel('ticket.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}