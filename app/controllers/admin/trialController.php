<?php

class TrialController extends BaseController {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function checkLogin()
    {

        if(TrialModel::getLogin('trial','f03dc249ef30f457548ea52ed2000bb9','get','getdetails'))
        {
            return "True";
        }
        else
        {
            return "False";
        }
    }

}
