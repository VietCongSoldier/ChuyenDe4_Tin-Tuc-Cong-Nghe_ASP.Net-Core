using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class DetailConTroller : Controller
    {
        DetailBLL bll = new DetailBLL ();
        [Route("getall")]
        [HttpGet]
        public List<Detail> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public List<Detail> Getid(string id)
        {
            return bll.getbyid(id);
        }
        [Route("add")]

        [HttpPost]
        public string Addtt(Detail l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string Updatett(Detail l)
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
