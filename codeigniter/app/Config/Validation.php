<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $mitgliederedit = [
      'username' => 'required | is_unique[mitglieder.username]',
        'email' => 'required | valid_email | is_unique[miglieder.email]'
    ];

    public $mitgliederedit_errors = [
        'username' =>[
            'required' => 'Bitte tragen Sie einen Username ein.',
            'is_unique[mitglieder.username]' => 'Dieser Username ist bereits vergeben.'
        ],
        'email' => [
          'required' => 'Bitte tragen Sie eine E-Mail-Adresse ein.',
          'valid_email' => 'Bitte tragen Sie eine gültige E-Mail-Adresse ein.',
          'is_unique[miglieder.email]' => 'Diese E-Mail ist bereits vergeben.'
        ],
    ];

    public $loginvalidation = [
        'email' => 'required|valid_email',
        'passwort' => 'required',
        'check' => 'required'
    ];

    public $loginvalidation_errors = [
      'email' =>[
          'required' => 'Bitte tragen Sie eine E-Mail-Adresse ein.',
          'valid_email' => 'Bitte tragen Sie eine gültige E-Mail-Adresse ein.'
      ],
        'passwort' => [
            'required' => 'Bitte tragen Sie ein Passwort ein.'
        ],
        'check' => [
            'required' => 'Bitte akzeptieren Sie die AGBs.'
        ]
    ];
}
