<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewDirection extends JViewLegacy {
    protected $item, $form, $script, $stationName;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');

        $this->addToolbar();

        parent::display($tpl);
        $this->setDocument();
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $title = JText::_('COM_RAILWAY2_DIRECTIONS_DESCRIPTION');

        JToolbarHelper::title($title, 'direction');
        JToolbarHelper::apply('direction.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('direction.save');
        JToolbarHelper::cancel('direction.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}