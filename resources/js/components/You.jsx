import React from 'react';
import './You.css'
import axios from 'axios';

class You extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            games: [{}],
            result: [{}],
          };
    }

    componentDidMount() {
        let random = Math.floor(Math.random() * 200)
        axios.get('https://api.rawg.io/api/games?key=b7a58e4633904057ad6d089436a2fe3f&' + 'page=' + random).then(reponse => {
            this.setState({ games: reponse.data.results });
            console.log(this.state.games)
        });
    }

    render() {
        return (
            <div className="container mt-5">
                <div className="col-12">
                    <div className="row">
            {this.state.games.map((game, index) =>
                        <div className="card mb-5 ms-4 d-flex align-self-center nopad" key={index}>
                            <img src={game.background_image} className="card-img-top" alt="..." />
                                <div className="card-body ">
                                    <h5 className="card-title d-flex justify-content-center mb-4"><strong>{game.name}</strong></h5>
                                    <div className="rating d-flex justify-content-center mt-2 mb-2">
                                        {game.rating > 1 ? <span className="d-flex justify-content-center fl fa fa-star checked"></span> : <span className="fa fa-star d-flex justify-content-center"></span>}
                                        {game.rating > 2 ? <span className="d-flex justify-content-center fa fa-star checked"></span> : <span className="fa fa-star d-flex justify-content-center"></span>}
                                        {game.rating > 3 ? <span className="d-flex justify-content-center fa fa-star checked"></span> : <span className="fa fa-star d-flex justify-content-center"></span>}
                                        {game.rating > 4 ? <span className="d-flex justify-content-center fa fa-star checked"></span> : <span className="fa fa-star d-flex justify-content-center"></span>}
                                        {game.rating > 5 ? <span className="d-flex justify-content-center fa fa-star checked"></span> : <span className="fa fa-star d-flex justify-content-center "></span>}
                                    </div>
                                    <div className=" mt-4 rating-score d-flex justify-content-center">
                                        <p className="fw-bold">{Math.round(game.rating)} / 5</p>
                                    </div>
                                    <p className="card-text d-flex justify-content-center">Sortis le : {game.released?.slice(0,4)}</p>
                                        <div className="platform d-flex justify-content-center">
                                            <button type="button" className="btn btn-primary dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                                                Plateforme
                                            </button>
                                            <div className="btn-group">
                                                <ul className="dropdown-menu">
                                            {game.platforms?.map((platform, index) =>
                                                    <li key={index}><a className="dropdown-item" href="#">{platform.platform.name}</a></li>
                                                    )}
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
            )}
                    </div>
                </div>
            </div>
        )
    }
}

export default You;
