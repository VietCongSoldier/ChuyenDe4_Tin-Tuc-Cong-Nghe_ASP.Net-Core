using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class NewsDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<News> News_search(string search)
        {

            News news = new News();
            DataSet ds = helper.Newssearch(search, out msg);
            List<News> list = new List<News>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new News
                {
                    NewsID = dr["NewsID"].ToString(),
                    CategoryID = dr["CategoryID"].ToString(),
                    Title = dr["Title"].ToString(),
                    Description = dr["Description"].ToString(),
                    Details = dr["Details"].ToString(),
                    Author = dr["Author"].ToString(),
                    Posttime = dr["Posttime"].ToString(),
                    Keyword = dr["Keyword"].ToString(),
                    ImageLink = dr["ImageLink"].ToString(),
                    Link = dr["Link"].ToString(),
                    NumRead = dr["NumRead"].ToString(),
                    feedback = dr["feedback"].ToString()
                });
            }
            return list;
        }
        public List<News> Get_TinTuc()
        {
            News tt = new News();
            DataSet ds = helper.newsget(tt, out msg);
            List<News> list = new List<News>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new News
                {
                    NewsID = dr["NewsID"].ToString(),
                    CategoryID = dr["CategoryID"].ToString(),
                    Title = dr["Title"].ToString(),
                    Description = dr["Description"].ToString(),
                    Details = dr["Details"].ToString(),
                    Author = dr["Author"].ToString(),
                    Posttime = dr["Posttime"].ToString(),
                    Keyword = dr["Keyword"].ToString(),
                    ImageLink = dr["ImageLink"].ToString(),
                    Link = dr["Link"].ToString(),
                    NumRead = dr["NumRead"].ToString(),
                    feedback = dr["feedback"].ToString()

                });
            }
            return list;
        }
        public List<News> GetTinTuc_id(string id)
        {

            News news = new News();
            news.NewsID = id;
            DataSet ds = helper.Newsgetid(news, out msg);
            List<News> list = new List<News>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new News
                {
                    NewsID = dr["NewsID"].ToString(),
                    CategoryID = dr["CategoryID"].ToString(),
                    Title = dr["Title"].ToString(),
                    Description = dr["Description"].ToString(),
                    Details = dr["Details"].ToString(),
                    Author = dr["Author"].ToString(),
                    Posttime = dr["Posttime"].ToString(),
                    Keyword = dr["Keyword"].ToString(),
                    ImageLink = dr["ImageLink"].ToString(),
                    Link = dr["Link"].ToString(),
                    NumRead = dr["NumRead"].ToString(),
                    feedback = dr["feedback"].ToString()
                });
            }
            return list;
        }
        public List<News> GetTinTuc_Category(string id)
        {

            News news = new News();
            news.NewsID = id;
            DataSet ds = helper.Newsgetcategory(news, out msg);
            List<News> list = new List<News>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new News
                {
                    NewsID = dr["NewsID"].ToString(),
                    CategoryID = dr["CategoryID"].ToString(),
                    Title = dr["Title"].ToString(),
                    Description = dr["Description"].ToString(),
                    Details = dr["Details"].ToString(),
                    Author = dr["Author"].ToString(),
                    Posttime = dr["Posttime"].ToString(),
                    Keyword = dr["Keyword"].ToString(),
                    ImageLink = dr["ImageLink"].ToString(),
                    Link = dr["Link"].ToString(),
                    NumRead = dr["NumRead"].ToString(),
                    feedback = dr["feedback"].ToString()
                });
            }
            return list;
        }
        public string Addtt(News tt)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Newscontroll1(tt ,"add_news");
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            return msg;
        }
        public string Xoatt(string id)
        {
            string msg = string.Empty;
            try
            {
                News news = new News();
                news.NewsID = id;
                news.Title = "delete";
                msg = helper.Newsdel(news, "delete_news");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string updatett(News news)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Newscontroll(news , "update_news");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
