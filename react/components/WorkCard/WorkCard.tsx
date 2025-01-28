import React from 'react';
import cn from 'classnames';
import { WorkCardType } from 'src/types';
import { Heading4, Text2, Link, Heading5 } from 'src/ui-kit';

type WorkCardProps = { className?: string } & WorkCardType;

export const WorkCard: React.FC<WorkCardProps> = ({
  title,
  description,
  imageOne,
  imageTwo,
  link,
  className = '',
  imageOneClassName = '',
  imageTwoClassName = '',
}): JSX.Element => (
  <article
    className={cn(
      'pb-14 lg:pb-0 w-full top lg:w-1/3 md:mr-6 last:mr-0',
      className
    )}
  >
    <Heading4 title={title} className="lg:hidden mb-3" />
    <div className="relative w-full pb-72 mb-3 lg:pb-[472px]">
      {imageOne && (
        <img
          srcSet={imageOne?.srcSet}
          src={imageOne?.src}
          alt={title}
          className={imageOneClassName}
        />
      )}
      {imageTwo && (
        <img
          srcSet={imageTwo?.srcSet}
          src={imageTwo?.src}
          alt={title}
          className={imageTwoClassName}
        />
      )}
    </div>
    <Heading5 title={title} className="hidden lg:block mb-6" />
    <Text2 title={description} fontSizeLg="x3" className="mb-3 lg:mb-6" />
    <Link title="Learn more" href={link} />
  </article>
);
