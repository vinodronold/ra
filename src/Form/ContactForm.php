<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
                'rule' => ['minLength', 3],
                'message' => 'A name is required and should be atleast 3 characters'
            ])->add('email', 'format', [
                'rule' => 'email',
                'message' => 'A valid email address is required',
            ])->add('body', 'length', [
                'rule' => ['minLength', 10],
                'message' => 'A message is required and should be atleast 10 characters'
            ]);
    }

    protected function _execute(array $data)
    {
        // Send an email.
        return true;
    }
}
