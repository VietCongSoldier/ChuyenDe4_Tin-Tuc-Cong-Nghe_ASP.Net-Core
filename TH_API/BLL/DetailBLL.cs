using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class DetailBLL
    {
        DetailDAL dal = new DetailDAL();
        public List<Detail> getall()
        {
            return dal.Get_Detail();
        }
        public List<Detail> getbyid(string id)
        {
            return dal.GetDetail_id(id);
        }
        public string add(Detail l)
        {
            return dal.Adddetail(l);
        }
        public string update(Detail l)
        {
            return dal.updatedetail(l);
        }
        public string xoa(string id)
        {
            return dal.Xoadetail(id);
        }
    }
}
