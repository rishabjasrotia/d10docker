<?php
namespace Drupal\og_group\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class GroupAddForm extends FormBase {

  public function getFormId() {
    return 'og_group_add';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    $form['title'] = [
      'type' => 'textfield',
    ];
  }

  public function submitForm(&$form, FormStateInterface $form_state){

  }

}
