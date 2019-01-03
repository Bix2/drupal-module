<?php

namespace  Drupal\icecream\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class adminForm extends FormBase {
    public function getFormId() {
        return 'admin_icecream_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['min_order_waffle'] = [
            '#type' => 'number',
            '#title' => 'Minimum order for waffles',
            '#default_value' => \Drupal::state()->get('min_order_waffle')
        ];

        $form['min_order_icecream'] = [
            '#type' => 'number',
            '#title' => 'Minimum order for icecream',
            '#default_value' => \Drupal::state()->get('min_order_icecream')
        ];
              
              
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];
    
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        
    }
}