<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getAccessToken($param, &$blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['grant_type'] = 'authorization_code';
        $body['code'] = $param['code'];
        $body['redirect_uri'] = $param['redirect_uri'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }

    public static function refreshAccessToken($param, $blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['grant_type'] = 'refresh_token';
        $body['refresh_token'] = $param['refresh_token'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }

    public static function revokeAccessToken($param, $blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['token'] = 'token';
        $body['token_type_hint'] = $param['token_type_hint'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }

    public static function upVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = 1;

        return json_encode($param);
    }

    public static function downVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = -1;

        return json_encode($param);
    }

    public static function unVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = 0;

        return json_encode($param);
    }

    public static function unblockUser($param, $blockCustom, $vendorUrl)
    {
        $param['type'] = 'enemy';
        $param['container'] = $param['name'];

        return json_encode($param);
    }

    public static function addFriend($param, $blockCustom, $vendorUrl)
    {
        $result['name'] = $param['name'];
        if(isset($param['note'])){
            $result['note'] = $param['note'];
        }

        return json_encode(['json' => json_encode($result)]);
    }

    public static function multiGetDescription($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];

        return json_encode($result);
    }

    public static function multiEdit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        if(isset($param['expand_srs'])&&strlen($param['expand_srs'])>0) {
            $result['expand_srs'] = $param['expand_srs'];
        }
        $paramList = ['display_name', 'description_md', 'icon_name', 'key_color', 'visibility', 'weighting_scheme'];
        foreach($paramList as $oneParam){
            if(isset($param[$oneParam])&&strlen($param[$oneParam])>0) {
                $result['model'][$oneParam] = $param[$oneParam];
                if(is_numeric($result['model'][$oneParam])){
                    $result['model'][$oneParam] = intval($result['model'][$oneParam]);
                }
            } }
        if(isset($param['subreddits'])&&strlen($param['subreddits'])>0) {
            $subredditsName = explode(',', $param['subreddits']);
            $subredditsNameObj = [];
            foreach($subredditsName as $oneName){
                $subredditsNameObj[] = ['name' => trim($oneName)];
            }
            $result['model']['subreddits'] = $subredditsNameObj;
        }
        if(isset($result['model'])){
            $result['model'] = json_encode($result['model']);
        }else{
            $result['model'] = '{}';
        }

        return json_encode($result);
    }

    public static function multiAddSubreddit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        $result['srname'] = $param['srname'];
        $result['model'] = json_encode(['name' => $param['srname']]);

        return json_encode($result);
    }

    public static function multiGetSubreddit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        $result['srname'] = $param['srname'];

        return json_encode($result);
    }

    public static function multiRemoveSubreddit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        $result['srname'] = $param['srname'];

        return json_encode($result);
    }

    public static function multiEditDescription($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        if(isset($param['model_body_md'])&&strlen($param['model_body_md'])>0){
            $result['model'] = json_encode(['body_md' => $param['model_body_md']]);
        }

        return json_encode($result);
    }

    public static function multiGet($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];
        if(isset($param['expand_srs'])&&strlen($param['expand_srs'])>0){
            $result['expand_srs'] = $param['expand_srs'];
        }

        return json_encode($result);
    }

    public static function multiRename($param, $blockCustom, $vendorUrl)
    {
        $result['from'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['from'];
        $result['to'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['to'];
        if(isset($param['display_name'])&&strlen($param['display_name'])>0){
            $result['display_name'] = $param['display_name'];
        }

        return json_encode($result);
    }

    public static function multiCopy($param, $blockCustom, $vendorUrl)
    {
        return self::multiRename($param, $blockCustom, $vendorUrl);
    }

    public static function multiDelete($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = 'user/' . $param['multiredditOwner'] . '/m/' . $param['multipath'];

        return json_encode($result);
    }

    public static function multiCreate($param, $blockCustom, $vendorUrl)
    {
        return self::multiEdit($param, $blockCustom, $vendorUrl);
    }

    public static function setSubredditStylesheet($param, $blockCustom, $vendorUrl)
    {
        $param['op'] = 'save';

        return json_encode($param);
    }

    public static function subscribe($param, $blockCustom, $vendorUrl)
    {
        $param['action'] = 'sub';

        return json_encode($param);
    }

    public static function unsubscribe($param, $blockCustom, $vendorUrl)
    {
        $param['action'] = 'unsub';

        return json_encode($param);
    }
}