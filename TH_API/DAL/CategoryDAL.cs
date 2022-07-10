using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class CategoryDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<Category> Get_LoaiTinTuc()
        {
            Category ltt = new Category();
            DataSet ds = helper.Categoryget(ltt, out msg);
            List<Category> list = new List<Category>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Category
                {
                    CategoryID = dr["CategoryID"].ToString(),
                    CategoryName = dr["CategoryName"].ToString(),
                    Description = dr["Description"].ToString(),
                    Link = dr["Link"].ToString(),

                });
            }
            return list;
        }
        public List<Category> Getid(string id)
        {

            Category monan = new Category();
            monan.CategoryID = id;
            monan.CategoryName = "getbyid";
            DataSet ds = helper.Categorygetid(monan, out msg);
            List<Category> list = new List<Category>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Category
                {
                    CategoryName = dr["CategoryName"].ToString(),
                    Description = dr["Description"].ToString(),
                    Link = dr["Link"].ToString(),

                });
            }
            return list;
        }
        public string AddLsp(Category ltt)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Categorycontroll1(ltt ,"add_ltt");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string XoaLsp(string id)
        {
            string msg = string.Empty;
            try
            {
                Category ltt = new Category();
                ltt.CategoryID = id;
                ltt.CategoryName = "delete";
                msg = helper.Categorydel(ltt, "delete_ltt");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string update(Category ltt)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Categorycontroll(ltt , "update_ltt");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
