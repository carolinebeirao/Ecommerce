import { navbar, nav, navbar } from 'react-bootstrap';
import { Link, withRouter } 'react-router-dom';
import './Menu.css';

 function BaseMenu() {
    return (
        <navbar className="navbar-dark" bg="primary" expand="lg" fixed="top">
            <navbar.Brand>
                FullstackEletro REACT
            </navbar.Brand>
            <navbar.toggle aria-controls="item-menu"/>
                <navbar.collapse id="item-menu">
                    <nav className="ml-auto mr-3">
                        <nav.Item>
                            <nav.Link href="/" to="/">Pagina Inicial</nav.Link>
                        </nav.Item>
                        <nav.Item>
                            <nav.Link href="/produtos" to="/produtos">Produtos</nav.Link>
                        </nav.Item>
                        <nav.Item>
                            <nav.Link href="/contatos" to="/contatos">Contatos</nav.Link>
                        </nav.Item>
                    </nav>
                </navbar.collapse>
        </navbar>
    )
}
const Menu = withRouter(BaseMenu);

export default