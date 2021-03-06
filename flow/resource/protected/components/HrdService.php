<?php
class HrdService extends CComponent {

    public function getHrUser($user_pin) { {
            try {
                $soapClient = new SoapClient("http://172.25.100.86:800/StaffInfo.asmx?wsdl", array(
                    'proxy_login' => "",
                    'proxy_password' => ""));
                $StaffPIN = array('strStaffPIN' => $user_pin);
                $strStaffINFO = $soapClient->__call('StaffInfoByPIN', array($StaffPIN));
                return $varb = CJSON::decode($strStaffINFO->StaffInfoByPINResult);
            } catch (SoapFault $fault) {
                $error = 1;
                //print($fault->faultcode . "-" . $fault->faultstring);
                echo '<div class="ui error message">BRAC HRD HRMS server seems down. Please call for support at 4400(HRD) 3200(ICT)</div>';
            }
        }
    }

     public function getHrUserByMobile($m) { {
            try {
                $soapClient = new SoapClient("http://172.25.100.86:800/StaffInfo.asmx?wsdl", array(
                    'proxy_login' => "",
                    'proxy_password' => ""));

                $mobile = array('mobile' => $m);
                $StaffInfoByMobile = $soapClient->__call('StaffInfoByMobile', array($mobile));

                return $varb = CJSON::decode($StaffInfoByMobile->StaffInfoByMobileResult);
            } catch (SoapFault $fault) {
                $error = 1;
                //print($fault->faultcode . "-" . $fault->faultstring);
                echo '<div class="ui error message">BRAC HRD HRMS server seems down. Please call for support at 4400(HRD) 3200(ICT)</div>';
            }
        }
    }

    public function getHrUserWithPic($user_pin) { {
            try {
                $soapClient = new SoapClient("http://172.25.100.86:800/StaffInfo.asmx?wsdl", array(
                    'proxy_login' => "",
                    'proxy_password' => ""));

                $StaffPIN = array('strStaffPIN' => $user_pin);
                $strStaffINFO = $soapClient->__call('StaffInfoWithBinaryPropertyByPIN', array($StaffPIN));

                return $varb = CJSON::decode($strStaffINFO->StaffInfoWithBinaryPropertyByPINResult);
            } catch (SoapFault $fault) {
                $error = 1;
                //print($fault->faultcode . "-" . $fault->faultstring);
                echo '<div class="ui error message">BRAC HRD HRMS server seems down. Please call for support at 4400(HRD) 3200(ICT)</div>';
            }
        }
    }

    public function getProgrammeUsers($programme) { {
            $ctx_opts = array(
                'http' => array(
                    'header' => 'Content-Type: application/soap+xml'
                )
            );
            $ctx = stream_context_create($ctx_opts);
            try {
                $soapClient = new SoapClient("http://172.25.100.86:800/StaffInfo.asmx?wsdl", array(
                    'stream_context' => $ctx,
                    'trace' => 1,
                    'proxy_login' => "",
                    'proxy_password' => ""));

                $obj = new stdClass();
                #$obj->project = new stdClass();
                #$obj->Keys = array( "ProjectId" => null);
                #$obj->Keys->ProjectId = null; 
                $obj->ProjectId = $programme;
                #$obj->ProgramID = "";
                #$obj->ProjectName = "";
                #$obj->ProjectDesc = "";
                $obj->ProjectYN = 'Y';
                $obj->SetDate = '1971-01-01';
                #$obj->UserName = null;
                #$obj->ProjectStatusTypeID;
                $obj->EffectiveDate = '1971-01-01';
                #$params = array('project' => $obj);

                $result = $soapClient->__call('StaffInfoByDepartment', array('StaffInfoByDepartment' => array('project' => $obj)));
                $resultDecode = CJSON::decode($result->StaffInfoByDepartmentResult);

                return $resultDecode;
            } catch (SoapFault $fault) {
                $error = 1;
                //print($fault->faultcode . "-" . $fault->faultstring);
                echo '<div class="ui error message">BRAC HRD HRMS server seems down. Please call for support at 4400(HRD) 3200(ICT)</div>';
            }
        }
    }

    public static function BRACProjects() {
        try {
            $soapClient = new SoapClient("http://172.25.100.86:800/Core.asmx?wsdl", array(
                'proxy_login' => "",
                'proxy_password' => ""
                    )
            );
            $soapResponce = $soapClient->__call('BRACProjects', array());
            $soapResult = CJSON::decode($soapResponce->BRACProjectsResult);
            return $soapResult;
        } catch (SoapFault $fault) {
            $error = 1;
           //print($fault->faultcode . "-" . $fault->faultstring);
            echo '<div class="ui error message">BRAC HRD HRMS server seems down. Please call for support at 4400(HRD) 3200(ICT)</div>';
        }
    }

    public static function getProjectsListData() {
        $listData = CHtml::listData(self::BRACProjects(), 'ProjectName', 'ProjectName');
        asort($listData);
        return $listData;
    }

}

?>