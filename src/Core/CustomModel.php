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

        return json_encode($param);
    }

    public static function addFriend($param, $blockCustom, $vendorUrl)
    {
        $result['name'] = $param['name'];
        if(isset($param['note'])){
            $result['note'] = $param['note'];
        }
        return json_encode($result);
    }

    public static function multiEdit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = $param['multipath'];
        if(isset($param['expand_srs'])&&strlen($param['expand_srs'])>0) {
            $result['expand_srs'] = $param['expand_srs'];
        }
        $paramList = ['display_name', 'description_md', 'icon_name', 'key_color', 'visibility', 'weighting_scheme'];
        foreach($paramList as $oneParam){
            if(isset($param[$oneParam])&&strlen($param[$oneParam])>0) {
                $result['model'][$oneParam] = intval($param[$oneParam]);
            } }
        if(isset($param['subreddits_name'])&&strlen($param['subreddits_name'])>0) {
            $subredditsName = explode(',', $param['subreddits_name']);
            $subredditsNameObj = [];
            foreach($subredditsName as $oneName){
                $subredditsNameObj[] = ['name' => trim($oneName)];
            }
            $result['model']['subreddits'] = json_encode($subredditsNameObj);
        }
        if(isset($result['model'])){
            $result['model'] = json_encode($result['model']);
        }

        return json_encode($param);
    }

    public static function multiAddSubreddit($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = $param['multipath'];
        $result['srname'] = $param['srname'];
        if(isset($param['model'])&&strlen($param['model'])>0){
            $result['model'] = json_encode(['name' => $param['model']]);
        }

        return json_encode($param);
    }

    public static function multiEditDescription($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = $param['multipath'];
        if(isset($param['model_body_md'])&&strlen($param['model_body_md'])>0){
            $result['model'] = json_encode(['body_md' => $param['model_body_md']]);
        }

        return json_encode($param);
    }

    public static function multiCreate($param, $blockCustom, $vendorUrl)
    {
        $result['multipath'] = $param['multipath'];
        if(isset($param['expand_srs'])&&strlen($param['expand_srs'])>0) {
            $result['expand_srs'] = $param['expand_srs'];
        }
        $paramList = ['display_name', 'description_md', 'icon_name', 'key_color', 'visibility', 'weighting_scheme'];
        foreach($paramList as $oneParam){
            if(isset($param[$oneParam])&&strlen($param[$oneParam])>0) {
                $result['model'][$oneParam] = intval($param[$oneParam]);
            } }
        if(isset($param['subreddits_name'])&&strlen($param['subreddits_name'])>0) {
            $subredditsName = explode(',', $param['subreddits_name']);
            $subredditsNameObj = [];
            foreach($subredditsName as $oneName){
                $subredditsNameObj[] = ['name' => trim($oneName)];
            }
            $result['model']['subreddits'] = json_encode($subredditsNameObj);
        }
        if(isset($result['model'])){
            $result['model'] = json_encode($result['model']);
        }

        return json_encode($param);
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