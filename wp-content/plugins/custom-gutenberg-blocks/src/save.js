import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({attributes:{ quote, person}}) {
	return (
		<section {...useBlockProps.save()} className="module module-quote-block">
			<div className="container">
				<div className="quote">
					<RichText.Content
						tagName='p'
						value={quote}
						className='quote-text'
					/>
					<RichText.Content
						tagName='p'
						value={person}
						className='person'
					/>
				</div>
			</div>
		</section>
	);
}
