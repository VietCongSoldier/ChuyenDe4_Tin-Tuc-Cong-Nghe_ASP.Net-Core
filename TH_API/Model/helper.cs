using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;
using System.Data;
using Model;

namespace DAL
{
    public class helper
    {
        protected SqlConnection cns = new SqlConnection("Data Source=VIET\\SQLEXPRESS;Initial Catalog=TinTucCongNghe;Integrated Security=True");
        
        public string News(News ltt)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_tt", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ltt.NewsID);
                com.Parameters.AddWithValue("@Title", ltt.Title);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet Newssearch(string search, out string msg)
        {
            msg = string.Empty;
            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Search_news", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@search", search);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public DataSet newsget(News lp, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Get_TinTuc", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public DataSet Newsgetid(News tt, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_TinTuc_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", tt.NewsID);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public DataSet Newsgetcategory(News tt, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_TinTuc_Category", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryID", tt.CategoryID);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public string Newscontroll1(News tt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", tt.NewsID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Newscontroll(News tt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", tt.NewsID);
                com.Parameters.AddWithValue("@Title", tt.Title);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Newsdel(News tt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", tt.NewsID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }

        //=======================================================================__Detail
        public string Detail(Detail ct)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_ct", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ct.NewsID);
                com.Parameters.AddWithValue("@Title", ct.Title);
                com.Parameters.AddWithValue("@Content", ct.Title);
                com.Parameters.AddWithValue("@[Content]", ct.Title);
                com.Parameters.AddWithValue("@Description", ct.Title);
                com.Parameters.AddWithValue("@img1", ct.Title);
                com.Parameters.AddWithValue("@img2", ct.Title);
                com.Parameters.AddWithValue("@img3", ct.Title);
                com.Parameters.AddWithValue("@content1", ct.Title);
                com.Parameters.AddWithValue("@content2", ct.Title);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet detailget(Detail ct, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Get_Detail", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public DataSet Detailgetid(Detail ct, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_Detail_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ct.NewsID);

                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        public string Detailcontroll1(Detail ct, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ct.NewsID);
                com.Parameters.AddWithValue("@Title", ct.Title);
                com.Parameters.AddWithValue("@ImageFirst", ct.ImageFirst);
                com.Parameters.AddWithValue("@Content", ct.Content);
                com.Parameters.AddWithValue("@Description", ct.Description);
                com.Parameters.AddWithValue("@img1", ct.img1);
                com.Parameters.AddWithValue("@img2", ct.img2);
                com.Parameters.AddWithValue("@img3", ct.img3);
                com.Parameters.AddWithValue("@content1", ct.content1);
                com.Parameters.AddWithValue("@content2", ct.content2);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Detailcontroll(Detail ct, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ct.NewsID);
                com.Parameters.AddWithValue("@Title", ct.Title);
                com.Parameters.AddWithValue("@ImageFirst", ct.ImageFirst);
                com.Parameters.AddWithValue("@Content", ct.Content);
                com.Parameters.AddWithValue("@Description", ct.Description);
                com.Parameters.AddWithValue("@img1", ct.img1);
                com.Parameters.AddWithValue("@img2", ct.img2);
                com.Parameters.AddWithValue("@img3", ct.img3);
                com.Parameters.AddWithValue("@content1", ct.content1);
                com.Parameters.AddWithValue("@content2", ct.content2);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Detaildel(Detail ct, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@NewsID", ct.NewsID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }


        //=============================================================================__Category
        public string Categories(Category ltt)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_ltt", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryName", ltt.CategoryName);
                com.Parameters.AddWithValue("@Description", ltt.Description);
                com.Parameters.AddWithValue("@Link", ltt.Link);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet Categoryget(Category lp, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Get_LoaiTinTuc", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        
        public DataSet Categorygetid(Category ltt, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_LoaiTinTuc_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryID", ltt.CategoryID);

                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }
        
        public string Categorycontroll1(Category ltt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryID", ltt.CategoryID);
                com.Parameters.AddWithValue("@CategoryName", ltt.CategoryName);
                com.Parameters.AddWithValue("@Description", ltt.Description);
                com.Parameters.AddWithValue("@Link", ltt.Link);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Categorycontroll(Category ltt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryID", ltt.CategoryID);
                com.Parameters.AddWithValue("@CategoryName", ltt.CategoryName);
                com.Parameters.AddWithValue("@Description", ltt.Description);
                com.Parameters.AddWithValue("@Link", ltt.Link);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Categorydel(Category ltt, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@CategoryID", ltt.CategoryID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        //===========================================================================__Member
        public string Member(Member mem)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_member", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@MemberID", mem.MemberID);
                com.Parameters.AddWithValue("@Email", mem.Email);
                com.Parameters.AddWithValue("@FullName", mem.FullName);
                com.Parameters.AddWithValue("@Birthday", mem.Birthday);
                com.Parameters.AddWithValue("@Gender", mem.Gender);
                com.Parameters.AddWithValue("@Address", mem.Address);
                com.Parameters.AddWithValue("@PhoneNumber", mem.PhoneNumber);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet Memberget(Member mem, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Get_Member", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public DataSet Membergetid(Member mem, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_Member_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@MemberID", mem.MemberID);

                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public string Membercontroll1(Member mem, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@MemberID", mem.MemberID);
                com.Parameters.AddWithValue("@Email", mem.Email);
                com.Parameters.AddWithValue("@FullName", mem.FullName);
                com.Parameters.AddWithValue("@Birthday", mem.Birthday);
                com.Parameters.AddWithValue("@Gender", mem.Gender);
                com.Parameters.AddWithValue("@Address", mem.Address);
                com.Parameters.AddWithValue("@PhoneNumber", mem.PhoneNumber);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Membercontroll(Member mem, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@MemberID", mem.MemberID);
                com.Parameters.AddWithValue("@Email", mem.Email);
                com.Parameters.AddWithValue("@FullName", mem.FullName);
                com.Parameters.AddWithValue("@Birthday", mem.Birthday);
                com.Parameters.AddWithValue("@Gender", mem.Gender);
                com.Parameters.AddWithValue("@Address", mem.Address);
                com.Parameters.AddWithValue("@PhoneNumber", mem.PhoneNumber);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Memberdel(Member mem, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@MemberID", mem.MemberID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        //=============================================================================================
        public string Account(Account acc)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_account", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@Username", acc.Username);
                com.Parameters.AddWithValue("@Password", acc.Password);
                com.Parameters.AddWithValue("@MemberID", acc.MemberID);
                com.Parameters.AddWithValue("@Decentralization", acc.Decentralization);
                com.Parameters.AddWithValue("@RegistrationDate", acc.RegistrationDate);
                com.Parameters.AddWithValue("@StatusMem", acc.StatusMem);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet Accountget(Account acc, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Get_Account", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public DataSet Accountgetid(Account acc, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_Account_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@Username", acc.Username);

                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public string Accountcontroll1(Account acc, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@Username", acc.Username);
                com.Parameters.AddWithValue("@Password", acc.Password);
                com.Parameters.AddWithValue("@MemberID", acc.MemberID);
                com.Parameters.AddWithValue("@Decentralization", acc.Decentralization);
                com.Parameters.AddWithValue("@RegistrationDate", acc.RegistrationDate);
                com.Parameters.AddWithValue("@StatusMem", acc.StatusMem);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Accountcontroll(Account acc, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@Username", acc.Username);
                com.Parameters.AddWithValue("@Password", acc.Password);
                com.Parameters.AddWithValue("@MemberID", acc.MemberID);
                com.Parameters.AddWithValue("@Decentralization", acc.Decentralization);
                com.Parameters.AddWithValue("@RegistrationDate", acc.RegistrationDate);
                com.Parameters.AddWithValue("@StatusMem", acc.StatusMem);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Accountdel(Account acc, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@Username", acc.Username);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        //===========================================================================__Feedback
        public string Feedback(Feedback feb)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand("getall_feedback", cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@FeedbackID", feb.FeedbackID);
                com.Parameters.AddWithValue("@NewsID", feb.NewsID);
                com.Parameters.AddWithValue("@Email", feb.Email);
                com.Parameters.AddWithValue("@NameReader", feb.NameReader);
                com.Parameters.AddWithValue("@Contents", feb.Contents);
                com.Parameters.AddWithValue("@Status", feb.Status);
                com.Parameters.AddWithValue("@DateComment", feb.DateComment);
                com.Parameters.AddWithValue("@IsDeleted", feb.IsDeleted);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public DataSet Feedbackget(Feedback feb, out string msg)
        {
            msg = string.Empty;
            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("Getall_Feedback", cns);
                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public DataSet Feedbackgetid(Feedback feb, out string msg)
        {
            msg = string.Empty;

            DataSet ds = new DataSet();
            try
            {
                SqlCommand com = new SqlCommand("get_Feedback_id", cns);

                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@FeedbackID", feb.FeedbackID);

                SqlDataAdapter da = new SqlDataAdapter(com);
                da.Fill(ds);
                msg = "complete";
                return ds;
            }
            catch (Exception ex)
            {

                msg = ex.Message;
            }

            return ds;
        }

        public string Feedbackcontroll1(Feedback feb, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@FeedbackID", feb.FeedbackID);
                com.Parameters.AddWithValue("@NewsID", feb.NewsID);
                com.Parameters.AddWithValue("@Email", feb.Email);
                com.Parameters.AddWithValue("@NameReader", feb.NameReader);
                com.Parameters.AddWithValue("@Contents", feb.Contents);
                com.Parameters.AddWithValue("@Status", feb.Status);
                com.Parameters.AddWithValue("@DateComment", feb.DateComment);
                com.Parameters.AddWithValue("@IsDeleted", feb.IsDeleted);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Feedbackcontroll(Feedback feb, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@FeedbackID", feb.FeedbackID);
                com.Parameters.AddWithValue("@NewsID", feb.NewsID);
                com.Parameters.AddWithValue("@Email", feb.Email);
                com.Parameters.AddWithValue("@NameReader", feb.NameReader);
                com.Parameters.AddWithValue("@Contents", feb.Contents);
                com.Parameters.AddWithValue("@Status", feb.Status);
                com.Parameters.AddWithValue("@DateComment", feb.DateComment);
                com.Parameters.AddWithValue("@IsDeleted", feb.IsDeleted);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
        public string Feedbackdel(Feedback feb, string produce)
        {
            string msg = string.Empty;
            try
            {
                SqlCommand com = new SqlCommand(produce, cns);
                com.CommandType = CommandType.StoredProcedure;
                com.Parameters.AddWithValue("@FeedbackID", feb.FeedbackID);
                cns.Open();
                com.ExecuteNonQuery();
                cns.Close();
                msg = "complete";
            }
            catch (Exception ex)
            {
                msg = ex.Message;
            }
            finally
            {
                if (cns.State == ConnectionState.Open)
                {
                    cns.Close();
                }
            }
            return msg;
        }
    }
}
