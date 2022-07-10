using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;
using System.Linq;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class TinTucConTroller : Controller
    {
        NewsBLL bll = new NewsBLL ();
        [Route("search")]
        [HttpGet]
        public List<News> search(string search)
        {
            return bll.search(search);
        }

        [Route("getall")]
        [HttpGet]
        public List<News> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public News Getid(string id)
        {
            return bll.getbyid(id).FirstOrDefault();
        }
        [HttpGet("{id_1}")]
        public List<News> GetCategory(string id)
        {
            return bll.getbycategory(id);
        }
        [Route("add")]

        [HttpPost]
        public string Addtt(News l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string Updatett(News l)
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
