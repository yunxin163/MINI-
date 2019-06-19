﻿/** @file nim_cpp_api.cpp
  * @brief NIM集合实现文件
  * @copyright (c) 2015-2017, NetEase Inc. All rights reserved
  * @date 2015/10/20
  */

#include "nim_cpp_api.h"

/**
* @namespace nim
* @brief namespace nim
*/
namespace nim
{

/** @fn void UnregNIMCallback()
* 反注册NIM提供的所有回调
* @return void 无返回值
*/
void UnregNIMCallback()
{
	Client::UnregClientCb();
	DataSync::UnregDataSyncCb();
	Friend::UnregFriendCb();
	Robot::UnregRobotCb();
	Session::UnregSessionCb();
	SystemMsg::UnregSysmsgCb();
	Talk::UnregTalkCb();
	Team::UnregTeamCb();
	User::UnregUserCb();
}

}