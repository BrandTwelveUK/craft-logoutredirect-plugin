<?php
namespace Craft;

class LogoutRedirect_RedirectController extends BaseController
{

    public function actionLogout()
    {

        $pluginSettings = craft()->plugins->getPlugin('logoutredirect')->getSettings();
        $redirect = $pluginSettings->logoutRedirectUrl;

        craft()->userSession->logout(false);
        $this->redirect($redirect);
    }

}
