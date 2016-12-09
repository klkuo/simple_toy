<?php
/**
 * Member model class.
 *
 * @author klkuo <davidkuo104@gmail.com>
 */
class Member_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add new member.
     * 
     * @param array $memberData Member basic data.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function addMember($memberData)
    {
    }

    /**
     * Set member data by ID.
     * 
     * @param string $memberId   Member uniq id.
     * @param array  $memberData Member basic data.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function setMemberById($memberId, $memberData)
    {
    }

    /**
     * Get member data by ID.
     * 
     * @param string $memberId   Member uniq id.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function getMemberById($memberId)
    {
    }

    /**
     * Get member listing data.
     * 
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function getMemberList()
    {
    }
}
