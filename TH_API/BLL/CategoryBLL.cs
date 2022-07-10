using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class CategoryBLL
    {
        CategoryDAL dal = new CategoryDAL();
        public List<Category> getall()
        {
            return dal.Get_LoaiTinTuc();
        }
        public List<Category> getbyid(string id)
        {
            return dal.Getid(id);
        }
        public string add(Category l)
        {
            return dal.AddLsp(l);
        }
        public string update(Category l)
        {
            return dal.update(l);
        }
        public string xoa(string id)
        {
            return dal.XoaLsp(id);
        }
    }
}
