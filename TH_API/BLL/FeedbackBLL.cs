using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class FeedbackBLL
    {
        FeedbackDAL dal = new FeedbackDAL();
        public List<Feedback> getall()
        {
            return dal.Get_Feedback();
        }
        public List<Feedback> getbyid(string id)
        {
            return dal.Getid(id);
        }
        public string add(Feedback l)
        {
            return dal.AddFeedback(l);
        }
        public string update(Feedback l)
        {
            return dal.update(l);
        }
        public string xoa(string id)
        {
            return dal.XoaFeedback(id);
        }
    }
}
