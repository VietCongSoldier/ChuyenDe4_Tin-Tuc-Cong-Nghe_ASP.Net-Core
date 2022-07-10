using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class DetailDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<Detail> Get_Detail()
        {
            Detail ct = new Detail();
            DataSet ds = helper.detailget(ct, out msg);
            List<Detail> list = new List<Detail>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Detail
                {
                    NewsID = dr["NewsID"].ToString(),
                    Title = dr["Title"].ToString(),
                    ImageFirst = dr["ImageFirst"].ToString(),
                    Content = dr["Content"].ToString(),
                    Description = dr["Description"].ToString(),
                    img1 = dr["img1"].ToString(),
                    img2 = dr["img2"].ToString(),
                    img3 = dr["img3"].ToString(),
                    content1 = dr["content1"].ToString(),
                    content2 = dr["content2"].ToString()

                });
            }
            return list;
        }
        public List<Detail> GetDetail_id(string id)
        {
            Detail ct = new Detail();
            ct.NewsID = id;
            ct.Title = "getbyid";
            DataSet ds = helper.Detailgetid(ct, out msg);
            List<Detail> list = new List<Detail>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Detail
                {
                    NewsID = dr["NewsID"].ToString(),
                    Title = dr["Title"].ToString(),
                    ImageFirst = dr["ImageFirst"].ToString(),
                    Content = dr["Content"].ToString(),
                    Description = dr["Description"].ToString(),
                    img1 = dr["img1"].ToString(),
                    img2 = dr["img2"].ToString(),
                    img3 = dr["img3"].ToString(),
                    content1 = dr["content1"].ToString(),
                    content2 = dr["content2"].ToString()
                });
            }
            return list;
        }
        public string Adddetail(Detail ct)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Detailcontroll1(ct ,"add_detail");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string Xoadetail(string id)
        {
            string msg = string.Empty;
            try
            {
                Detail ct = new Detail();
                ct.NewsID = id;
                ct.Title = "delete";
                msg = helper.Detaildel(ct, "delete_detail");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string updatedetail(Detail ct)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Detailcontroll(ct , "update_detail");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
