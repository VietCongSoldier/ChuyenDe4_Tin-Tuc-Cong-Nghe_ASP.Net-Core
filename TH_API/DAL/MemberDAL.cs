using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class MemberDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<Member> Get_Member()
        {
            Member mem = new Member();
            DataSet ds = helper.Memberget(mem, out msg);
            List<Member> list = new List<Member>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Member
                {
                    MemberID = dr["MemberID"].ToString(),
                    Email = dr["Email"].ToString(),
                    FullName = dr["FullName"].ToString(),
                    Birthday = dr["Birthday"].ToString(),
                    Gender = dr["Gender"].ToString(),
                    Address = dr["Address"].ToString(),
                    PhoneNumber = dr["PhoneNumber"].ToString(),

                });
            }
            return list;
        }
        public List<Member> Getid(string id)
        {

            Member mem = new Member();
            mem.MemberID = id;
            mem.FullName = "getbyid";
            DataSet ds = helper.Membergetid(mem, out msg);
            List<Member> list = new List<Member>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Member
                {
                    MemberID = dr["MemberID"].ToString(),
                    Email = dr["Email"].ToString(),
                    FullName = dr["FullName"].ToString(),
                    Birthday = dr["Birthday"].ToString(),
                    Gender = dr["Gender"].ToString(),
                    Address = dr["Address"].ToString(),
                    PhoneNumber = dr["PhoneNumber"].ToString(),
                });
            }
            return list;
        }
        public string AddMember(Member mem)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Membercontroll1(mem ,"add_mem");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string XoaMember(string id)
        {
            string msg = string.Empty;
            try
            {
                Member mem = new Member();
                mem.MemberID = id;
                mem.FullName = "delete";
                msg = helper.Memberdel(mem, "delete_mem");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string update(Member mem)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Membercontroll(mem , "update_mem");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
