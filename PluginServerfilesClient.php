<?php
class PluginServerfilesClient{
  function __construct(){
    wfPlugin::includeonce('server/push');
  }
  public function get_file($data){
    $push = new PluginServerPush();
    $result = $push->push($data['host'].'/file/get_file', $data);
    $result = json_decode($result, true);
    return $result;
  }
  public function get_folder($data){
    $push = new PluginServerPush();
    $result = $push->push($data['host'].'/file/get_folder', $data);
    $result = json_decode($result, true);
    return $result;
  }
  public function set_file($data){
    $push = new PluginServerPush();
    $result = $push->push($data['host'].'/file/set_file', $data);
    $result = json_decode($result, true);
    return $result;
  }
  public function delete_file($data){
    $push = new PluginServerPush();
    $result = $push->push($data['host'].'/file/delete_file', $data);
    $result = json_decode($result, true);
    return $result;
  }
}