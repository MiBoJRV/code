import React from 'react';
import { SOCIALS } from './constants';
import { Heading5 } from 'src/ui-kit';
export const Socials: React.FC = (): JSX.Element => {
  return (
    <div>
      <Heading5
        fontSize="text-link-box"
        fontSizeLg="lg:text-link-box"
        className="font-semibold mt-[5px] lg:mt-14"
        title="Follow us"
      />
      <ul className="flex justify-start gap-5 mt-3">
        {SOCIALS.map((social) => (
          <li key={social.id}>
            <a className="group" href={social.href}>
              {social.icon}
            </a>
          </li>
        ))}
      </ul>
    </div>
  );
};
