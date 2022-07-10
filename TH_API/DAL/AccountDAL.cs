using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;

namespace DAL
{
    public class AccountDAL
    {
        helper helper = new helper();
        string msg = string.Empty;
        public List<Account> Get_Account()
        {
            Account acc = new Account();
            DataSet ds = helper.Accountget(acc, out msg);
            List<Account> list = new List<Account>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Account
                {
                    Username = dr["Username"].ToString(),
                    Password = dr["Password"].ToString(),
                    MemberID = dr["MemberID"].ToString(),
                    Decentralization = dr["Decentralization"].ToString(),
                    RegistrationDate = dr["RegistrationDate"].ToString(),
                    StatusMem = dr["StatusMem"].ToString(),

                });
            }
            return list;
        }
        public List<Account> Getid(string id)
        {

            Account acc = new Account();
            acc.Username = id;
            DataSet ds = helper.Accountgetid(acc, out msg);
            List<Account> list = new List<Account>();
            foreach (DataRow dr in ds.Tables[0].Rows)
            {
                list.Add(new Account
                {
                    Username = dr["Username"].ToString(),
                    Password = dr["Password"].ToString(),
                    MemberID = dr["MemberID"].ToString(),
                    Decentralization = dr["Decentralization"].ToString(),
                    RegistrationDate = dr["RegistrationDate"].ToString(),
                    StatusMem = dr["StatusMem"].ToString(),
                });
            }
            return list;
        }
        public string AddAccount(Account acc)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Accountcontroll1(acc ,"add_acc");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string XoaAccount(string id)
        {
            string msg = string.Empty;
            try
            {
                Account acc = new Account();
                acc.Username = id;
                acc.Password = "delete";
                msg = helper.Accountdel(acc, "delete_acc");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }
        public string update(Account acc)
        {
            string msg = string.Empty;
            try
            {
                msg = helper.Accountcontroll(acc , "update_acc");
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            return msg;
        }

    }

}
