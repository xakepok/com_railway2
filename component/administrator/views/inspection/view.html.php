<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewInspection extends JViewLegacy {
    protected $item, $form, $script;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');

        $this->addToolbar();
        $this->setDocument();

        parent::display($tpl);
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $title = JText::_('COM_RAILWAY2_INSPECTIONS');

        JToolbarHelper::title($title, 'inspection');
        JToolbarHelper::apply('inspection.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('inspection.save');
        JToolbarHelper::cancel('inspection.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}