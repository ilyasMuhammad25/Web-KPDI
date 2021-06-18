<?php
if (!function_exists('get_page')) {
    function get_page($slug = null)
    {
        $pageModel = new \App\Adminigniter\Modules\Backend\Page\Models\PageModel();
        $page = $pageModel->where('slug', $slug)->row();

        return $page;
    }
}

/**
 * ---------------
 * Progress Status
 * ---------------
 */
if (!function_exists('progress_has_history')) {
    function progress_has_history($ref_id, $status, $ifbb = false)
    {
        $historyModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOHistModel();
        $field = 'ref_id';
        if($ifbb){
            $historyModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBHistModel();
            $field = 'ref_id';
        }

        $count = count($historyModel->where($field, $ref_id)->where('status', $status)->findAll());

        return $count >= 1;
    }
}

if (!function_exists('progress_save_history')) {
    function progress_save_history($ref_id, $status, $message, $ifbb = false)
    {
        $historyModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOHistModel();
        $field = 'ref_id';
        if($ifbb){
            $historyModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBHistModel();
            $field = 'ref_id';
        }

        $history = progress_get_history($ref_id, $status, $ifbb);
        if(!empty($history)){
            $update_data = [
                'id' => $history->id,
                'description' => $message,
                'updated_by' => user_id(),
            ];
            $historyModel->update($history->id, $update_data);
            return $history->id;
        } else {
            $save_data = [
                'status' => $status,
                'description' => $message,
                'created_by' => user_id(),
            ];

            $save_data[$field] = $ref_id;

            $newProgressFOHistId = $historyModel->insert($save_data);
            return $newProgressFOHistId;
        }
    }
}

if (!function_exists('progress_get_history')) {
    function progress_get_history($ref_id, $status, $ifbb = false)
    {
        $historyModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOHistModel();
        $field = 'ref_id';
        if($ifbb){
            $historyModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBHistModel();
            $field = 'ref_id';
        }

        $history = $historyModel->asObject()->where($field, $ref_id)->where('status', $status)->get()->getRow();

        if(!empty($history)){
            return $history;
        } else {
            return null;
        }
    }
}

if (!function_exists('progress_remove_history')) {
    function progress_remove_history($ref_id, $ifbb = false)
    {
        $historyModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOHistModel();
        $field = 'ref_id';
        if($ifbb){
            $historyModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBHistModel();
            $field = 'ref_id';
        }

        $histories = $historyModel->where($field, $ref_id)->find_all();
        // dd($histories);

        if(!empty($histories)){
            foreach ($histories as $history){
                $historyModel->delete($history->id);
            }
            return true;
        } else {
            return false;
        }
    }
}

/**
 * ---------------
 * Progress Chat
 * ---------------
 */

if (!function_exists('progress_save_chat')) {
    function progress_save_chat($ref_id, $status, $message, $ifbb = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOChatModel();
        $field = 'ref_id';
        if($ifbb){
            $chatModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBChatModel();
            $field = 'ref_id';
        }

        $save_data = [
            'status' => $status,
            'description' => $message,
            'created_by' => user_id(),
        ];

        $save_data[$field] = $ref_id;

        $newProgressChatId = $chatModel->insert($save_data);
        return $newProgressChatId;
    }
}

if (!function_exists('progress_get_chats')) {
    function progress_get_chats($ref_id, $ifbb = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOChatModel();
        $field = 'ref_id';
        if($ifbb){
            $chatModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBChatModel();
            $field = 'ref_id';
        }

        $chats = $chatModel->where($field, $ref_id)->findAll();
        return $chats;
    }
}

if (!function_exists('progress_get_chat')) {
    function progress_get_chat($ref_id, $status, $ifbb = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\ProgressFO\Models\ProgressFOChatModel();
        $field = 'ref_id';
        if($ifbb){
            $chatModel = new \App\Adminigniter\Modules\Backend\ProgressBB\Models\ProgressBBChatModel();
            $field = 'ref_id';
        }

        $chat = $chatModel->asObject()->where($field, $ref_id)->where('status', $status)->get()->getRow();

        if(!empty($chat)){
            return $chat;
        } else {
            return null;
        }
    }
}

/**
 * ---------------
 * Facility Chat
 * ---------------
 */

if (!function_exists('facility_save_chat')) {
    function facility_save_chat($ref_id, $status, $message, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\FacilityBB\Models\FacilityBBChatModel();
        $field = 'ref_id';

        $save_data = [
            'status' => $status,
            'description' => $message,
            'created_by' => user_id(),
        ];

        $save_data[$field] = $ref_id;

        $newProgressChatId = $chatModel->insert($save_data);
        return $newProgressChatId;
    }
}

if (!function_exists('facility_get_chats')) {
    function facility_get_chats($ref_id, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\FacilityBB\Models\FacilityBBChatModel();
        $field = 'ref_id';

        $chats = $chatModel->where($field, $ref_id)->findAll();
        return $chats;
    }
}

if (!function_exists('facility_get_chat')) {
    function facility_get_chat($ref_id, $status, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\FacilityBB\Models\FacilityBBChatModel();
        $field = 'ref_id';

        $chat = $chatModel->asObject()->where($field, $ref_id)->where('status', $status)->get()->getRow();

        if(!empty($chat)){
            return $chat;
        } else {
            return null;
        }
    }
}

/**
 * ---------------
 * Survey Chat
 * ---------------
 */

if (!function_exists('survey_save_chat')) {
    function survey_save_chat($ref_id, $status, $message, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\SurveyBB\Models\SurveyBBChatModel();

        $save_data = [
            'ref_id' => $ref_id,
            'status' => $status,
            'description' => $message,
            'created_by' => user_id(),
        ];

        $newProgressChatId = $chatModel->insert($save_data);
        return $newProgressChatId;
    }
}

if (!function_exists('survey_get_chats')) {
    function survey_get_chats($ref_id, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\SurveyBB\Models\SurveyBBChatModel();
        $field = 'ref_id';

        $chats = $chatModel->where($field, $ref_id)->findAll();
        return $chats;
    }
}

if (!function_exists('survey_get_chat')) {
    function survey_get_chat($ref_id, $status, $iff = false)
    {
        $chatModel = new \App\Adminigniter\Modules\Backend\SurveyBB\Models\SurveyBBChatModel();
        $field = 'ref_id';

        $chat = $chatModel->asObject()->where($field, $ref_id)->where('status', $status)->get()->getRow();

        if(!empty($chat)){
            return $chat;
        } else {
            return null;
        }
    }
}

?>