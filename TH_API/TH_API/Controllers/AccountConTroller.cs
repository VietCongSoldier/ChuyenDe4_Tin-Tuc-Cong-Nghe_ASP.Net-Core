using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class AccountConTroller : Controller
    {
        AccountBLL bll = new AccountBLL ();
        [Route("getall")]
        [HttpGet]
        public List<Account> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public List<Account> Getid(string id)
        {
            return bll.getbyid(id);
        }
        [Route("add")]

        [HttpPost]
        public string AddAccount(Account l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string Update(Account l)
        {
            return bll.update(l);
        }
        [Route("delete")]
        [HttpDelete]
        public string Delete(string id)
        {
            return bll.xoa(id);
        }
    }
}
