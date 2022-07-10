using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using Model;

namespace BLL
{
    public class AccountBLL
    {
        AccountDAL dal = new AccountDAL();
        public List<Account> getall()
        {
            return dal.Get_Account();
        }
        public List<Account> getbyid(string id)
        {
            return dal.Getid(id);
        }
        public string add(Account l)
        {
            return dal.AddAccount(l);
        }
        public string update(Account l)
        {
            return dal.update(l);
        }
        public string xoa(string id)
        {
            return dal.XoaAccount(id);
        }
    }
}
