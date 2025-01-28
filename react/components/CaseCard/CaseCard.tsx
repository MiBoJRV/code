import React from 'react';
import cn from 'classnames';
import { CaseCardType } from 'src/types';
import { Heading4, Link, Text4 } from 'src/ui-kit';

type CaseCardProps = { className?: string } & CaseCardType;

export const CaseCard: React.FC<CaseCardProps> = ({
  title,
  subTitle,
  imageOne,
  imageTwo,
  link,
  className = '',
  imageOneClassName = '',
  imageTwoClassName = '',
}): JSX.Element => (
  <article
    className={cn(
      'flex items-center justify-center w-full top flex-col lg:gap-12 lg:max-w-[1090px] lg:m-auto lg:flex-row',
      className
    )}
  >
    <div className="flex w-full justify-center lg:max-w-1/2 lg:justify-end">
      <div className="max-w-full flex justify-center items-center text-center flex-col lg:text-left lg:items-start lg:max-w-[526px]">
        <Text4
          title={subTitle}
          fontSize="text-sub-title"
          fontSizeLg="lg:text-sub-title"
          className="mb-3 !text-blue-warm text-center lg:text-left"
        />
        <Heading4
          fontSize="text-h4-mob"
          fontSizeLg="lg:text-h3-mob"
          title={title}
          className="mb-12"
        />
        <Link
          title="Learn more"
          href={link}
          className="absolute bottom-[75px] lg:static"
        />
      </div>
    </div>
    <div className=" w-full mb-11 relative pb-72 lg:mb-3 lg:max-w-1/2 lg:pb-[319px]">
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
  </article>
);
