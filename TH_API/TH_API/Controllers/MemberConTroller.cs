using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class MemberConTroller : Controller
    {
        MemberBLL bll = new MemberBLL ();
        [Route("getall")]
        [HttpGet]
        public List<Member> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public List<Member> Getid(string id)
        {
            return bll.getbyid(id);
        }
        [Route("add")]

        [HttpPost]
        public string AddMember(Member l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string Update(Member l)
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
