using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class MemberBLL
    {
        MemberDAL dal = new MemberDAL();
        public List<Member> getall()
        {
            return dal.Get_Member();
        }
        public List<Member> getbyid(string id)
        {
            return dal.Getid(id);
        }
        public string add(Member l)
        {
            return dal.AddMember(l);
        }
        public string update(Member l)
        {
            return dal.update(l);
        }
        public string xoa(string id)
        {
            return dal.XoaMember(id);
        }
    }
}
