<?php

namespace Application\Form;

use Zend\Form\Form;

class SortForm extends Form{
    
    public function __construct()
    {
        // Define form name
        parent::__construct('sort-form');
        
        // Set POST method for this form
        $this->setAttribute('method', 'post');
        $this->addElements();
    }
    
    protected function addElements() 
    {

        $this->add([
            'type'  => 'text',
            'name' => 'numbers',
            'attributes' => [                
                'class' => 'form-control'
            ],
        ]);       
        
        // Add the Submit button
        $this->add([
            'type'  => 'submit',
            'name' => 'submit',
            'attributes' => [                
                'value' => 'Iniciar'
            ],
        ]);
    }
    
}

