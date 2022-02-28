<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bonfire\Consent\Controllers;

use App\Controllers\AdminController;

class ConsentSettingsController extends AdminController
{
    protected $theme      = 'Admin';
    protected $viewPrefix = 'Bonfire\Modules\Consent\Views\\';

    /**
     * Display the Consent settings page.
     *
     * @return string
     */
    public function index()
    {
        return $this->render($this->viewPrefix . 'settings', [
            'consents' => setting('Consent.consents'),
        ]);
    }

    /**
     * Saves the consent settings to the config file, where it
     * is automatically saved by our dynamic configuration system.
     */
    public function save()
    {
        $rules = [
            'requireConsent'  => 'required',
            'consentLength'   => 'required_with[requireConsent]|string',
            'policyUrl'       => 'required_with[requireConsent]|string',
            'consentMessage'  => 'required_with[requireConsent]|string',
            'consents.*.name' => 'required_with[requireConsent]|string',
            'consents.*.desc' => 'required_with[requireConsent]|string',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        setting('Consent.requireConsent', $this->request->getPost('requireConsent'));
        setting('Consent.consentLength', $this->request->getPost('consentLength'));
        setting('Consent.policyUrl', $this->request->getPost('policyUrl'));
        setting('Consent.consentMessage', $this->request->getPost('consentMessage'));
        setting('Consent.consents', $this->request->getPost('consents'));

        alert('success', 'The settings have been saved.');

        return redirect()->route('consent-settings');
    }
}
