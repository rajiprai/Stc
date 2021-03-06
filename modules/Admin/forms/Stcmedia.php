<?php
class Admin_Form_Stcmedia extends Zend_Form {
    public function init() {
        $this->setMethod('post');
        
        
        
        $this->addElement('text', 'key', array(
            'label' => 'Key :',
            'required' => true
        ));
        $this->key->setAttrib('class', 'txt')->addValidator('NotEmpty');
        
      
        $this->addElement('file', 'media_path', array(
            'label' => 'Media File :',
            'description' => '',
            'destination' => 'public/uploads/stcmedia',
        ));
              
        $this->media_path->setAttrib('class', 'txt');
		
        
        
        
	   $this->addElement('submit', 'submit', array(
          'ignore'   => true,
            'label'    => 'Add',
        ));


         $this->submit->setAttrib('class', 'button altbutton');





        $this->addElement('button', 'cancel', array(
          'ignore'   => true,
            'label'    => 'Cancel',
        ));


        $this->cancel->setAttrib('class', 'button altbutton');
        $this->cancel->setAttrib('onclick', 'history.go(-1);');


          $this->setDecorators(array(
                    'FormElements',
         			array(array('e' => 'HtmlTag'), array('tag' => 'dl')),
         			array(array('e1' => 'HtmlTag'), array('tag' => 'div', 'class' => 'inner-form')),
         			'Form'
        ));


        $this->setAttrib('class', 'basic');


	}


}