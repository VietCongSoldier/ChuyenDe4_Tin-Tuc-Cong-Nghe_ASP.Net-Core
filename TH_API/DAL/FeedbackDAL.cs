using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class FeedbackDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<Feedback> Get_Feedback()
        {
            Feedback feb = new Feedback();
            DataSet ds = helper.Feedbackget(feb, out msg);
            List<Feedback> list = new List<Feedback>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Feedback
                {
                    FeedbackID = dr["FeedbackID"].ToString(),
                    NewsID = dr["NewsID"].ToString(),
                    Email = dr["Email"].ToString(),
                    NameReader = dr["NameReader"].ToString(),
                    Contents = dr["Contents"].ToString(),
                    Status = dr["Status"].ToString(),
                    DateComment = dr["DateComment"].ToString(),
                    IsDeleted = dr["IsDeleted"].ToString(),

                });
            }
            return list;
        }
        public List<Feedback> Getid(string id)
        {

            Feedback feb = new Feedback();
            feb.FeedbackID = id;
            DataSet ds = helper.Feedbackgetid(feb, out msg);
            List<Feedback> list = new List<Feedback>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Feedback
                {
                    FeedbackID = dr["FeedbackID"].ToString(),
                    NewsID = dr["NewsID"].ToString(),
                    Email = dr["Email"].ToString(),
                    NameReader = dr["NameReader"].ToString(),
                    Contents = dr["Contents"].ToString(),
                    Status = dr["Status"].ToString(),
                    DateComment = dr["DateComment"].ToString(),
                    IsDeleted = dr["IsDeleted"].ToString(),
                });
            }
            return list;
        }
        public string AddFeedback(Feedback feb)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Feedbackcontroll1(feb ,"add_feb");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string XoaFeedback(string id)
        {
            string msg = string.Empty;
            try
            {
                Feedback feb = new Feedback();
                feb.FeedbackID = id;
                msg = helper.Feedbackdel(feb, "delete_feb");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string update(Feedback feb)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Feedbackcontroll(feb , "update_feb");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
