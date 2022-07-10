using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class NewsBLL
    {
        NewsDAL dal = new NewsDAL();
        public List<News> getall()
        {
            return dal.Get_TinTuc();
        }
        public List<News> getbyid(string id)
        {
            return dal.GetTinTuc_id(id);
        }
        public List<News> getbycategory(string id)
        {
            return dal.GetTinTuc_Category(id);
        }
        public string add(News l)
        {
            return dal.Addtt(l);
        }
        public string update(News l)
        {
            return dal.updatett(l);
        }
        public string xoa(string id)
        {
            return dal.Xoatt(id);
        }
        public List<News> search(string search)
        {
            return dal.News_search(search);
        }
    }
}
